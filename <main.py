import nltk
import numpy as np
import random
import string

#Se importan las librerias

f=open('D:/Proyects/bot_001_v01/chatbot.txt','r',errors = 'ignore')
raw=f.read()
#leer archivo
raw=raw.lower()
#minuscula convertir

sent_tokens = nltk.sent_tokenize(raw)
#convertir a oraciones
word_tokens = nltk.word_tokenize(raw)
#convertir a palabras

sent_tokens[:2]
['a chatbot (also known as a talkbot, chatterbot, bot, im bot, interactive agent, or artificial conversational entity) is a computer program or an artificial intelligence which conducts a conversation via auditory or textual methods.',
 'such programs are often designed to convincingly simulate how a human would behave as a conversational partner, thereby passing the turing test.']
#enviar tokens

word_tokens[:2]
['a', 'chatbot', '(', 'also', 'known']
#tokens

lemmer = nltk.stem.WordNetLemmatizer()
#Wordnet=diccionario semanticamente orientado de ingles incluido en NLTK
def LemTokens(tokens):
 return [lemmer.lemmatize(token) for token in tokens]
remove_punct_dict = dict((ord(punct), None) for punct in string.punctuation)
def LemNormalize(text):
 return LemTokens(nltk.word_tokenize(text.lower().translate(remove_punct_dict)))
#Lematizar a ingles (temporal)


#Saludos
GREETING_INPUTS = ("hello", "hi", "greetings", "sup", "what's up","hey",)
GREETING_RESPONSES = ["hi", "hey", "*nods*", "hi there", "hello", "I am glad! You are talking to me"]
def greeting(sentence):
 
    for word in sentence.split():
        if word.lower() in GREETING_INPUTS:
            return random.choice(GREETING_RESPONSES)
#Saludos
#retorna saludo random

from sklearn.feature_extraction.text import TfidfVectorizer
#frecuencia de documentos de frecuencia inversa a termino
from sklearn.metrics.pairwise import cosine_similarity
#similitud coseno = transformacion aplicado a textos para obter 2 vectores de valor real en el espacio vectorial




def response(user_response):
    robo_response=''
    #respuesta
    sent_tokens.append(user_response)
    #envia token

    TfidfVec = TfidfVectorizer(tokenizer=LemNormalize, stop_words='english')
    #se define lenguaje
    tfidf = TfidfVec.fit_transform(sent_tokens)
    #se transforma la token
    vals = cosine_similarity(tfidf[-1], tfidf)
    #se aplica la formula de similaridad de cosenos
    idx=vals.argsort()[0][-2]
    flat = vals.flatten()
    flat.sort()
    req_tfidf = flat[-2]

    if(req_tfidf==0):
        #errores
        robo_response=robo_response+"I am sorry! I don't understand you"
        return robo_response
    else:
        #se envia respuesta
        robo_response = robo_response+sent_tokens[idx]
        return robo_response

flag=True
print("ROBO: My name is Robo. I will answer your queries about Chatbots. If you want to exit, type Bye!")
#inicializador
while(flag==True):
 user_response = input()
 user_response=user_response.lower()
 if(user_response!='bye'):
     #para despedirse
     if(user_response=='thanks' or user_response=='thank you' ):
         #si responde
        flag=False
        print("ROBO: You are welcome..")
     else:
           if(greeting(user_response)!=None):
                print("ROBO: "+greeting(user_response))
           else:
                print("ROBO: ",end="")
                print(response(user_response))
                sent_tokens.remove(user_response)
 else:
    flag=False
    #fin
    print("ROBO: Bye! take care..")



#/path/to/your/venv/bin/python
