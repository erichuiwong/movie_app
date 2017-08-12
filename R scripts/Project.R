#Importing the Data
dataset <- read.csv('Movies_Dataset.csv')

#Removing rows with missing values
dataset <- dataset[complete.cases(dataset),]

#Averaging the scores of the Directors and Actors
directorData <- aggregate(dataset$imdb_score, by=list(name=dataset$director_name), data=dataset, FUN=mean)
actor1Data <- aggregate(dataset$imdb_score, by=list(name=dataset$actor_1_name), data=dataset, FUN=mean)
actor2Data <- aggregate(dataset$imdb_score, by=list(name=dataset$actor_2_name), data=dataset, FUN=mean)
actor3Data <- aggregate(dataset$imdb_score, by=list(name=dataset$actor_3_name), data=dataset, FUN=mean)

#Replace Director and Actor Scores into Dataset
dataset$director_name <- directorData[match(dataset$director_name, directorData$name),2]
dataset$actor_1_name <- actor1Data[match(dataset$actor_1_name, actor1Data$name),2]
dataset$actor_2_name <- actor2Data[match(dataset$actor_2_name, actor2Data$name),2]
dataset$actor_3_name <- actor3Data[match(dataset$actor_3_name, actor3Data$name),2]

#Dividing the imdb score into four groups
dataset$imdb_score <- cut(dataset$imdb_score, breaks=c(0, 2.5, 5, 7.5, 10), labels=paste("A", 1:4, sep=""))

#install.packages("party")
library(party)
library(partykit)
set.seed(1234)

#Using a 70/30 Split
ind <- sample(2, nrow(dataset), replace = TRUE, prob = c(0.7, 0.3))
train.data <- dataset[ind==1,]
test.data <- dataset[ind==2,]

#Focus on imdb_score
myf = imdb_score ~ director_name+actor_1_name+actor_2_name+actor_3_name+budget+gross

#Using a ctree classification on the training data
movie_ctree <- ctree(myf, data=train.data)
table(predict(movie_ctree), train.data$imdb_score)
plot(movie_ctree)

#Using the ctree classifcation on the testing data
testpred <- predict(movie_ctree, newdata=test.data)
table(testpred, test.data$imdb_score)

rules <- partykit:::.list.rules.party(movie_ctree)