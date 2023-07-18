import speech_recognition as sr
from wit import Wit

def vui2(utterance):
    client = Wit("DYB2PF7T2S3WLU3DZEPQZGCKHHGMSU36")
    resp = client.message(utterance)
    print('Respuesta: ' + str(resp))


def vui():
    r = sr.Recognizer()
    with sr.Microphone() as source:
        print("Di algo...")
        audio = r.listen(source)
    try:
        text = r.recognize_google(audio, language="es")  # Reconocimiento de voz utilizando el servicio de Google
        print("Has dicho: " + text)
    except sr.UnknownValueError:
        print("No se pudo reconocer la voz.")
    except sr.RequestError as e:
        print("Error al solicitar los resultados del reconocimiento de voz; {0}".format(e))

def vui3():
    r = sr.Recognizer()
    speech = sr.Microphone()
    with speech as source:
        print("say something!!….")
        audio = r.listen(source)
    try:
        recog = r.recognize_wit(audio, key="DYB2PF7T2S3WLU3DZEPQZGCKHHGMSU36")
        print("You said: " + recog)
    except sr.UnknownValueError:
        print("could not understand audio")
    except sr.RequestError as e:
        print("Could not request results ; {0}".format(e))

# Press the green button in the gutter to run the script.

if __name__ == '__main__':
    #vui2("temperature to 100 degrees")
    vui3()

# See PyCharm help at https://www.jetbrains.com/help/pycharm/