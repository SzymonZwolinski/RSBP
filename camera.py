#!/usr/bin/python
from picamera import PiCamera
from time import sleep
import sys
import datetime
import RPi.GPIO as GPIO
def nazwa():
    return datetime.datetime.now().strftime("%Y-%m-d_%H.%M.%S.h264")

def nagrywanie():
	akt_stan = False
	poprz_stan = False
	GPIO.setmode(GPIO.BCM)
	GPIO.setwarnings(False)
	GPIO.setup(17,GPIO.IN)
	camera = PiCamera()
	while True:
		poprz_stan = akt_stan
		i= GPIO.input(17)
		if i == 1:
			if akt_stan == False: 
				akt_stan = True
				camera.start_preview()
				plik = nazwa()
				camera.start_recording(plik)
				camera.wait_recording(10)
				camera.stop_preview()
				camera.stop_recording()
				akt_stan = False
		
	    
nagrywanie()
