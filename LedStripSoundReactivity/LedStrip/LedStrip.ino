/*
The following code is the logic of a controller led strip with a button to pattern of brightness including 
sound reactivity with the suitable sensors, to view more of my work enter in my page: tecnosmart.com.br
 */
 //constants to buttons:
const char buttonMode = A0;
const char mic =A4;
const char pot1 =A1;
const char pot2 =A2;
const char pot3 =A3;
const int channel1 = 5;
const int channel2 = 6;
const int channel3 = 9;

//variables values to pushbutton, potentiometers, microfone sensor and lot values to fade:
int buttonState = 0;
int vpot1 = 0;
int vpot2 = 0;
int vpot3 = 0;
int vmic = 0;
int countValue =0;
int vlot1=random(0,255);
int vlot2=random(0,255);
int vlot3=random(0,255);
//Function to return the new value on FadeMode
int functionLot(int x){
int xtoReturn=x;
  if(x<=254 && x>=1){
      xtoReturn++;
    }else{
      xtoReturn=1;
    }
    return xtoReturn;
}
//Function to mode manual, reactivity and fade
int functionMode(int x){
  int mapPot1=map(vpot1, 0,1023,0,255);
  int mapPot2=map(vpot2, 0,1023,0,255);
  int mapPot3=map(vpot3, 0,1023,0,255);
  if(x==0){
    analogWrite(channel1, mapPot1);
    analogWrite(channel2, mapPot2);
    analogWrite(channel3, mapPot3);
  } else if(x==1){
    int intesityOfMic=map(vmic,0,1023,0,100);
    int micMapPot1=(mapPot1/100)*intesityOfMic;
    int micMapPot2=(mapPot2/100)*intesityOfMic;
    int micMapPot3=(mapPot3/100)*intesityOfMic;
    analogWrite(channel1, micMapPot1);
    analogWrite(channel2, micMapPot2);
    analogWrite(channel3, micMapPot3);
  } else if(x==2){
      while(buttonState==LOW){
        analogWrite(channel1, vlot1);
        analogWrite(channel2, vlot2);
        analogWrite(channel3, vlot3);
        vlot1=functionLot(vlot1);
        vlot2=functionLot(vlot2);
        vlot3=functionLot(vlot3);
        Serial.println("Mode Fade");
        Serial.println(vlot1);
        Serial.println(vlot2);
        Serial.println(vlot3);
        buttonState=digitalRead(buttonMode);
        }
        delay(35);
      }
}
void setup(){
	pinMode(mic, INPUT);
  pinMode(pot1, INPUT);
	pinMode(pot2, INPUT);
	pinMode(pot3, INPUT);
	pinMode(buttonMode, INPUT);
	pinMode(channel1, OUTPUT);
	pinMode(channel2, OUTPUT);
	pinMode(channel3, OUTPUT);
	pinMode(LED_BUILTIN, OUTPUT);
	Serial.begin(9600);
}
void loop(){
  // read the input pin of pushbutton
  buttonState= digitalRead(buttonMode);
  // read the input pin of potentiometers
  vpot1 = analogRead(pot1);
  vpot2 = analogRead(pot2);
  vpot3 = analogRead(pot3);
  vmic = analogRead(mic);
  if (buttonState == HIGH) {
    // turn LED on
    analogWrite(channel1, 255);
    analogWrite(channel2, 0);
    analogWrite(channel3, 0);
    digitalWrite(LED_BUILTIN, HIGH);
    // print out th`e state of the button
    if (countValue < 2){
      countValue++;
    }
    else{
      countValue = 0;
    }
    Serial.print("Mode: ");
  	Serial.println(countValue);
    Serial.print("Value potentiometer 1: ");
    Serial.println(vpot1);
    Serial.print("Value potentiometer 2: ");
    Serial.println(vpot2);
    Serial.print("Value potentiometer 3: ");
    Serial.println(vpot3);
    Serial.print("Value mic: ");
    Serial.println(vmic);

  } else {
    // turn LED off
    digitalWrite(LED_BUILTIN, LOW);
  }
  functionMode(countValue);
  delay(125); // Delay a little bit to improve simulation performance
}