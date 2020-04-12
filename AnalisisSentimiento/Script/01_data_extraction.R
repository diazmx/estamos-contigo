# Descargamos las palabras positivas y negativas en españo
words_s = read.csv("https://raw.githubusercontent.com/jboscomendoza/rpubs/master/sentimientos_afinn/lexico_afinn.en.es.csv")
View(words_s)

tuits <- tuits %>%
  unnest_tokens(input="")

######## Datos a predecir ######
# Datos para el entrenamiento
tweets <- read.csv("dato.csv", sep="")

# Creación del corpus
corpus <- Corpus(VectorSource(tuits3$text))
