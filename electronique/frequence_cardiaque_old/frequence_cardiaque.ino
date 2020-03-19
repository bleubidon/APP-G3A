// https://www.norwegiancreations.com/2017/08/what-is-fft-and-how-can-you-implement-it-on-an-arduino/
#include "arduinoFFT.h"

#define SAMPLES 512             //Must be a power of 2
#define SAMPLING_FREQUENCY 100 //Hz, must be less than 10000 due to ADC

arduinoFFT FFT = arduinoFFT();
 
unsigned int sampling_period_us;
unsigned long microseconds;
 
double vReal[SAMPLES];
double vImag[SAMPLES];

int asMillivolts(float analogVoltage) {
    return 4096 * (analogVoltage / (3.3 * 1000));
}

int analogInputPin = A0;
int thresholdLow = asMillivolts(50);
int thresholdHigh = asMillivolts(100);
bool alreadyTicked = false;
int nombreBattements = 0;

void setup() {
    Serial.begin(9600);
    sampling_period_us = round(1000000*(1.0/SAMPLING_FREQUENCY));

    /*SAMPLING*/
    Serial.println("Début de l'acquisition");
    for(int i=0; i<SAMPLES; i++)
    {
        microseconds = micros();    //Overflows after around 70 minutes!
     
        vReal[i] = analogRead(analogInputPin);
        vImag[i] = 0;
     
        while(micros() < (microseconds + sampling_period_us)){
        }
    }
    Serial.println("Fin de l'acquisition");
 
    /*FFT*/
    FFT.Windowing(vReal, SAMPLES, FFT_WIN_TYP_HAMMING, FFT_FORWARD);
    FFT.Compute(vReal, vImag, SAMPLES, FFT_FORWARD);
    FFT.ComplexToMagnitude(vReal, vImag, SAMPLES);
    double peak = FFT.MajorPeak(vReal, SAMPLES, SAMPLING_FREQUENCY);
 
    /*PRINT RESULTS*/
    Serial.print("\nFréquence cardiaque: ");
    Serial.print(peak * 60);     //Print out what frequency is the most dominant.
    Serial.println(" bpm");
    
    while (1) {}
}

void loop() {
    // Old way to do it

    //     // Serial.println(analogRead(analogInputPin));
    // if (analogRead(analogInputPin) > thresholdHigh && !alreadyTicked) {
    //     nombreBattements ++;
    //     Serial.print("Ticks: ");
    //     Serial.println(nombreBattements);
    //     alreadyTicked = true;
    // }
    // else if (analogRead(analogInputPin) < thresholdLow) {
    //     alreadyTicked = false;
        
    // }
}
