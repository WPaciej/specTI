                SOB Program
                SOB Przerw1
                SOB Przerw2
                SOB Przerw3
                SOB Przerw4

Program:        POB Dwa
                ODE Jeden
                £AD P1_it
                
                POB Cztery
                ODE Jeden
                £AD P2_it
                
                POB Szesc
                ODE Jeden
                £AD P3_it
                
                POB Osiem
                ODE Jeden
                £AD P4_it
                
                ODE P4_it
                £AD MASKA1

                
                
Petla:          POB Znak_At
                WYP 2
                SOB Petla  

// Obs³uga przerwania 1                         
Przerw1:        CZM MASKA1
                MAS 15                
                DNS
                
                POB P1_it
                ODE Jeden
                SOM Koniec
                £AD P1_it
                
               POB Dlugosc1
               £AD TMP1
                
P1:             POB TMP1
                ODE Jeden
                £AD TMP1
                SOM Koniec1
                POB Znak_Jeden
                WYP 2
                SOB P1
                
Koniec1:        PZS
                MSK MASKA1
                PWR

// Obs³uga przerwania 2
Przerw2:        CZM MASKA2
                MAS 7
                DNS
                
                POB P2_it
                ODE Jeden
                SOM Koniec
                £AD P2_it
                
                POB Dlugosc2
                £AD TMP2
                
P2:             POB TMP2
                ODE Jeden
                £AD TMP2
                SOM Koniec2
                POB Znak_Dwa
                WYP 2
                SOB P2
                
Koniec2:        PZS
                MSK MASKA2
                PWR

// Obs³uga przerwania 3                
Przerw3:        CZM MASKA3
                MAS 3
                DNS
                
                POB P3_it
                ODE Jeden
                SOM Koniec
                £AD P3_it
                
                POB Dlugosc3
                £AD TMP3
                
P3:             POB TMP3
                ODE Jeden
                £AD TMP3
                SOM Koniec3
                POB Znak_Trzy
                WYP 2
                SOB P3
                
Koniec3:        PZS
                MSK MASKA3
                PWR

// Obs³uga przerwania 4                
Przerw4:        CZM MASKA4
                MAS 1
                DNS
                
                POB P4_it
                ODE Jeden
                SOM Koniec
                £AD P4_it
                
                POB Dlugosc4
                £AD TMP4
                
P4:             POB TMP4
                ODE Jeden
                £AD TMP4
                SOM Koniec4
                POB Znak_Cztery
                WYP 2
                SOB P4
                
Koniec4:        PZS
                MSK MASKA4
                PWR

// Koniec programu przez przerwanie                
Koniec:         STP
    
Znak_At:        RST '#'
Znak_Jeden:     RST '1'
Znak_Dwa:       RST '2'
Znak_Trzy:      RST '3'
Znak_Cztery:    RST '4'

Jeden:          RST 1
Dwa:            RST 2
Cztery:         RST 4
Szesc:          RST 6
Osiem:          RST 8

Dlugosc1:       RST 3
Dlugosc2:       RST 6
Dlugosc3:       RST 9
Dlugosc4:       RST 12

MASKA1:         RPA
MASKA2:         RPA
MASKA3:         RPA
MASKA4:         RPA
P1_it:          RPA
P2_it:          RPA
P3_it:          RPA
P4_it:          RPA
TMP1:           RPA 
TMP2:           RPA
TMP3:           RPA
TMP4:           RPA
