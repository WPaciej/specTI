                SOB Program
                SOB Przerw1
                SOB Przerw2
                SOB Przerw3
                SOB Przerw4
                
Program:        POB Wielkosc_P
                £AD Dlugosc
                £AD Szerokosc
     
PetlaKw1:       POB Dlugosc
                ODE Jeden
                £AD Dlugosc
                SOM Koniec
                POB Wielkosc_P
                £AD Szerokosc
                POB Znak_NL
                WYP 2
PetlaKw2:       POB Szerokosc
                ODE Jeden
                £AD Szerokosc
                SOM PetlaKw1
                POB Znak_At
                WYP 2
                SOB PetlaKw2
           
Koniec:         POB Znak_NL
                WYP 2
                STP
                         
Przerw1:        CZM MASKA
                MAS 15
                DNS
                POB Znak_Jeden
                WYP 2
                PZS
                MSK MASKA
                PWR

Przerw2:        CZM MASKA
                MAS 15
                DNS
                POB Znak_Dwa
                WYP 2
                PZS
                MSK MASKA
                PWR
                
Przerw3:        CZM MASKA
                MAS 15
                POB Znak_Trzy
                WYP 2
                PZS
                MSK MASKA
                PZS
                STP
                
Przerw4:        CZM MASKA
                MAS 15
                DNS
                POB Znak_Cztery
                WYP 2
                PZS
                MSK MASKA
                PWR

Wielkosc_P:     RST 10
Jeden:          RST 1
     
Znak_At:        RST '#'
Znak_NL:        RST 10
Znak_Jeden:     RST '1'
Znak_Dwa:       RST '2'
Znak_Trzy:      RST '3'
Znak_Cztery:    RST '4'

Dlugosc:        RPA
Szerokosc:      RPA
MASKA:          RPA
