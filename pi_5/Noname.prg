                POB ST0
                £AD SUMA
                £AD LICZ
Pêtla:          WPR 1
                SDP SPR
                SOM Pêtla
                DOD SUMA
                £AD SUMA
                POB LICZ
                DOD ST1
                £AD LICZ
                ODE ST5
                SOZ KONIEC
                SOB Pêtla
                
Koniec:         POB SUMA
                ODE ST10
                SOM JEDNA
                DOD ST10
                DZI ST10
                £AD TMP
                DOD ST48
                WYP 2
                POB TMP
                MNO ST10
                £AD TMP
                POB SUMA
                ODE TMP
                DOD ST48
                WYP 2
                STP
                
JEDNA:          DOD ST10
                DOD ST48
                WYP 2
                STP
                
SPR:            ODE ST48
                SOM NIE_CYFRA
                ODE ST10
                SOM CYFRA
                
NIE_CYFRA:      POB STM1
                PWR

CYFRA:          DOD ST10
                PWR
                

ST0: RST 0
ST1: RST 1
ST10: RST 10
STM1: RST -1
ST48: RST 48
ST5: RST 5
SUMA: RPA
LICZ: RPA
TMP: RPA 