tuits <- read.csv("Data/tuitsFase3.csv", stringsAsFactors = F, encoding = "UTF-8")
#tuits <- as.data.frame(tuits$Tweet.Text)
cT <- Corpus(VectorSource(tuits$Tweet.Text))
cT <- tm_map(cT, tolower)
cT <- tm_map(cT, removePunctuation)
cT <- tm_map(cT, removeWords, c(stopwords("spanish"), "fase 3"))
cT <- tm_map(cT, stripWhitespace)


df <- data.frame(text = sapply(cT, as.character), stringsAsFactors = FALSE)
df2 <- tibble(df)
df2

tuits <- 
  df2 %>%
  unnest_tokens(input = "text", output = "Palabra") %>%
  inner_join(words_s, ., by = "Palabra") %>%
  mutate(Tipo = ifelse(Puntuacion > 0, "Positiva", "Negativa"))

df2 <- df2 %>% add_column(id = 1:100)

tuits2 <-
  tuits %>%
  group_by(id) %>%
  summarise(Puntuacion_tuit = mean(Puntuacion)) %>%
  left_join(df2, ., by = "id") %>% 
  mutate(Puntuacion_tuit = ifelse(is.na(Puntuacion_tuit), 0, Puntuacion_tuit))


tuits3 <- 
  tuits2 %>%
  mutate(Tipo = ifelse(Puntuacion_tuit > 0, 1, 0))
