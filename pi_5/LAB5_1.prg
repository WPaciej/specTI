petla: wpr 1
       £AD znak
       SOB sprawdzanie
spr2:  POB licznik
       ODE st3
       SOZ KONIEC
       SOB petla
sprawdzanie: POB znak
             ODE szukane
             SOZ ilosc
             SOB petla
ilosc: POB licznik
       DOD stl
       £AD licznik
       SOB spr2
KONIEC: £AD licznik
        POB st0
        STP
        
licznik: RST 0
st0: RST 0
stl: RST 1
st3: RST 3
znak: RPA
szukane: RST 37