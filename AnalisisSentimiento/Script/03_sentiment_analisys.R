dtf <- DocumentTermMatrix(corpus)
sparse <- removeSparseTerms(dtf, 0.995)
tweetsSparce <- as.data.frame(as.matrix(sparse))
colnames(tweetsSparce) = make.names(colnames(tweetsSparce))
tweetsSparce$sentiment <- tuits3$Tipo

# Dividimos los datos para el entrenamiento
splitData <- sample.split(tweetsSparce$sentiment, SplitRatio = 0.8)
train <- subset(tweetsSparce, splitData==T)
test <- subset(tweetsSparce, splitData==F)

# Algorutni SVM
SVM <- svm(as.factor(sentiment)~ ., data = train)
summary(SVM)
predictSVM <- predict(SVM, newdata=test)
confusionMatrix(predictSVM, test$sentiment)
