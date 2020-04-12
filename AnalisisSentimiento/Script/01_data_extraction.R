# Extraccion de los tweets con referencia a cuarentena
tw <- read.xlsx2("Data/tw2.xlsx", sheetName="ostras", encoding = "UTF-8", stringsAsFactors = F)
View(tw)

tuits <- as.data.frame(tw$Tweet.Text[1:100])
colnames(tuits) <- "text"
# Limpieza de los tuits
for (tuit in tuits) {
  print(tuit)
}
tuits <- removePunctuation(tuits[0])
head(tuits)
tuits[0]

# Descargamos las palabras positivas y negativas en españo
words_s = read.csv("https://raw.githubusercontent.com/jboscomendoza/rpubs/master/sentimientos_afinn/lexico_afinn.en.es.csv")
View(words_s)

tuits <- tuits %>%
  unnest_tokens(input="")

######## Datos a predecir ######
# Datos para el entrenamiento
tweets <- read.csv("dato.csv", sep="")

# Creación del corpus
corpus <- Corpus(VectorSource(tweets$text))