#Simple Linear Regression
#Import the dataset
dataset = read.csv('cleaned.csv')
dataset = dataset[complete.cases(dataset),] #removes all rows that are blank
dataset = dataset[,c(6,19)] #keeps column 6(gross) and column 19(budget)
#change data set within certain range to remove outliers
dataset = dataset[!rowSums(dataset[-2] < 10000000),] #gross > 10000000
dataset = dataset[!rowSums(dataset[-2] > 300000000),] #gross < 300000000
dataset = dataset[!rowSums(dataset[-1] > 300000000),] #budget < 300000000
#dataset$budget = factor(dataset$budget)
#normalize dataset
#max = apply(dataset,2,max)
#min = apply(dataset,2,min)
#dataset = scale(dataset, center =min, scale = max -min)

#dataset[, -c(2)] <- scale(dataset[, -c(2)]) #scale column gross
#dataset[, -c(1)] <- scale(dataset[, -c(1)])
#dataset = scale(dataset)

#Splitting the data set into the Training and Test set
#install.packages('caTools')
library(caTools)
set.seed(123)
split = sample.split(dataset$gross, SplitRatio = 90/100)
training_set = subset(dataset, split == T)
test_set = subset(dataset, split == F)

#normalize data set
#max = apply(training_set,2,max)
#min = apply(training_set,2,min)
#training_set[] = scale(training_set, center = min, scale = max - min)

#max = apply(test_set,2,max)
#min = apply(test_set,2,min)
#test_set[] = scale(test_set, center =min, scale = max -min)


#Fitting Simple Linear Regression to the Training set
regressor = lm(formula = gross ~ budget, 
               data = training_set)
summary(regressor)
#Predicting the Test set results
y_pred = predict(regressor, newdata = test_set)
y_pred

#Visualizing the Training set results
#install.packages("ggplot2")
library(ggplot2)
ggplot() +
  geom_point(aes(x = training_set$budget, y = training_set$gross),
             colour = 'red') +
  geom_line(aes(x = training_set$budget, y = predict(regressor, newdata = training_set)),
            colour = 'blue') +
  ggtitle('Gross vs Budget (Training set)') +
  xlab('budget') +
  ylab('gross')
#install.packages('labeling')

#Visualizing the Test set results
library(ggplot2)
ggplot() +
  geom_point(aes(x = test_set$budget, y = test_set$gross),
             colour = 'red') +
  geom_line(aes(x = training_set$budget, y = predict(regressor, newdata = training_set)),
            colour = 'blue') +
  ggtitle('Gross vs Budget (Test set)') +
  xlab('budget') +
  ylab('gross')