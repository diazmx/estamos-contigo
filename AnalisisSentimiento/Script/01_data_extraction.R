# Datos para el entrenamiento
tweets <- read.csv("dato.csv", sep="")

# Creación del corpus
corpus <- Corpus(VectorSource(tweets$text))