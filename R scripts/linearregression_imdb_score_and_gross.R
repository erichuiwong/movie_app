#Simple Linear Regression
#Import the dataset
dataset = read.csv('cleaned.csv')
dataset = dataset[complete.cases(dataset),] #removes all rows that are blank
dataset = dataset[,c(6,21)] #columns for gross and imdb_score
#dataset[, -c(2)] <- scale(dataset[, -c(2)]) #scale column gross
#Splitting the data set into the Training and Test set
#install.packages('caTools')
library(caTools)
set.seed(123)
split = sample.split(dataset$gross, SplitRatio = 90/100)
training_set = subset(dataset, split == T)
test_set = subset(dataset, split == F)

#Fitting Simple Linear Regression to the Training set
regressor = lm(formula = gross ~ imdb_score, 
               data = training_set)
summary(regressor)
#Predicting the Test set results
y_pred = predict(regressor, newdata = test_set)
y_pred

#Visualizing the Training set results
#install.packages("ggplot2")
library(ggplot2)
ggplot() +
  geom_point(aes(x = training_set$imdb_score, y = training_set$gross),
             colour = 'red') +
  geom_line(aes(x = training_set$imdb_score, y = predict(regressor, newdata = training_set)),
            colour = 'blue') +
  ggtitle('Gross vs imdb_score (Training set)') +
  xlab('imdb_score') +
  ylab('gross')
#install.packages('labeling')

#Visualizing the Test set results
library(ggplot2)
ggplot() +
  geom_point(aes(x = test_set$imdb_score, y = test_set$gross),
             colour = 'red') +
  geom_line(aes(x = training_set$imdb_score, y = predict(regressor, newdata = training_set)),
            colour = 'blue') +
  ggtitle('Gross vs imdb_score (Test set)') +
  xlab('imdb_score') +
  ylab('gross')