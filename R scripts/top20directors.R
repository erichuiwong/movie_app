#Top 20 directors
#Import the dataset
dataset = read.csv('cleaned2.csv')
dataset = dataset[complete.cases(dataset),] #removes all rows that are blank
dataset = dataset[,c(1,4)] #director and gross
#dataset[, -c(1)] <- scale(dataset[, -c(1)]) #scale column gross
#dataset2 = head(sort(dataset[,-c(1)]),20) #sort from highest to lowest top 20
dataset = dataset[with(dataset, order(-gross)),] #order gross from highest to lowest
dataset2 = dataset[c(1:10),c(1:2)]#keeps row 1-10

H = dataset2[,-c(1)]
M = dataset2[,-c(2)]
barplot(H, main="Top Grossing 10 director ", names.arg= M, ylab="Gross", xlab="Director",  
        cex.names=0.8, col=c("red"))