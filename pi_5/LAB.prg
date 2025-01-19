petla: wpr 1
       £AD znak
       SOB sprawdzanie
spr2:  POB licznik
       ODE st3
       SOZ KONIEC
       SOB petla
sprawdzanie: POB znak
             
             ODE lim1
             SOM spr4
             
spr3:        POB znak
             ODE szukane
             SOZ ilosc
             SOB petla
ilosc: POB licznik
       DOD st1
       £AD licznik
       SOB spr2
KONIEC: £AD licznik
        POB st0
        STP
        
spr4:       POB znak
            ODE lim2
            SOM spr3
            
wypisz:     POB znak
            rzk: £AD TAB
            POB rzk
            DOD st1
            £AD rzk
            POB size
            DOD st1
            £AD size
            SOB spr3
        
licznik: RST 0
st0: RST 0
st1: RST 1
st3: RST 3
znak: RPA
szukane: RST 37
lim1: RST 91
lim2: RST 80
size: RST 0
TAB: RPA