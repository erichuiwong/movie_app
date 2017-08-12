# K-Means Clustering

# Importing the dataset
dataset = read.csv('cleaned.csv')
dataset = dataset[complete.cases(dataset),] #removes all rows that are blank
dataset = dataset[,c(3,6)] #keep only columns 3(number_crtic_for_reviews) and 6(gross)
dataset[, -c(1)] <- scale(dataset[, -c(1)]) #scale column gross
#plot(dataset)

# Splitting the dataset into the Training set and Test set
# install.packages('caTools')
library(caTools)
set.seed(123)
split = sample.split(dataset$num_critic_for_reviews, SplitRatio = 0.90)
training_set = subset(dataset, split == TRUE)
test_set = subset(dataset, split == FALSE)

# Feature Scaling
#training_set = scale(training_set)
#test_set = scale(test_set)

# Using the elbow method to find the optimal number of clusters(changed dataset to testset)
set.seed(6)
wcss = vector()
for (i in 1:10) wcss[i] = sum(kmeans(training_set, i)$withinss)
plot(1:10,
     wcss,
     type = 'b',
     main = paste('The Elbow Method for Training Set'),
     xlab = 'Number of clusters',
     ylab = 'WCSS')

# Fitting K-Means to the dataset/testset
set.seed(29)
kmeans = kmeans(x = training_set, centers = 3)
y_kmeans = kmeans$cluster

#visualizing the cluster trainingset 
library(cluster)
clusplot(training_set,
         y_kmeans,
         lines = 0,
         shade = TRUE,
         color = TRUE,
         labels = 2,
         plotchar = FALSE,
         span = TRUE,
         main = paste('Clusters of movies'),
         xlab = 'num_critic_for_reviews',
         ylab = 'gross') 

# Using the elbow method to find the optimal number of clusters(changed dataset to testset)
set.seed(6)
wcss = vector()
for (i in 1:10) wcss[i] = sum(kmeans(test_set, i)$withinss)
plot(1:10,
     wcss,
     type = 'b',
     main = paste('The Elbow Method for Testset'),
     xlab = 'Number of clusters',
     ylab = 'WCSS')

# Fitting K-Means to the dataset/testset
set.seed(29)
kmeans = kmeans(x = test_set, centers = 3)
y_kmeans = kmeans$cluster
 
# Visualising the clusters testset
library(cluster)
clusplot(test_set,
         y_kmeans,
         lines = 0,
         shade = TRUE,
         color = TRUE,
         labels = 2,
         plotchar = FALSE,
         span = TRUE,
         main = paste('Clusters of movies'),
         xlab = 'num_critic_for_reviews',
         ylab = 'gross')