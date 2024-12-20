                POB n
                £AD silnia
                £AD b
                SOZ koniec // silnia z 0 = 1
                loop:
                POB b
                ODE jeden
                SOZ koniec
                £AD b           
                DNS // a
                POB silnia
                DNS // b
                SDP mnozenie
                PZS // silnia
                £AD silnia
                SOB loop
                koniec: POB silnia
                STP                 
                n: rst 6
                silnia: rpa
                b: rpa
                jeden: rst 1
                zero: rst 0

mnozenie:
   PZS // slad
   £AD slad
   PZS // b
   £AD b1
   PZS // a 
   £AD a1
   POB zero
   £AD c1
   loop1: 
      POB c1
      DOD b1
      £AD c1
      POB a1
      ODE jeden
      SOZ end2
      £AD a1
      SOB loop1
   end2: 
   POB c1
   DNS // c
   POB slad
   DNS // slad
   PWR
   a1: rpa
   b1: rpa
   c1: rpa
   slad: rpa