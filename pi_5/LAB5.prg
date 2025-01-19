POB zero
£AD licznik_procent
£AD size
POB ³ad_tab
£AD rzk

loop1:
   WPR 1
   £AD znak
   // Sprawdzamy czy znak mieœci siê w zakresie P – Z
   ODE znak_P
   SOM skip
   POB znak
   ODE znak_Z
   ODE jeden
   SOM wpisz
   SOB skip

   wpisz:
      // Wpisujemy znak do tablicy
      POB znak
      rzk: £AD tab
      POB rzk
      DOD jeden
      £AD rzk
      POB size
      DOD jeden
      £AD size   
   skip:
   POB znak
   ODE procent
   SOZ zwieksz_procent
   SOB skip2

   zwieksz_procent:
      POB licznik_procent
      DOD jeden
      £AD licznik_procent
      ODE trzy
      SOZ end
   skip2:
   SOB loop1

end:
   // Wypisujemy rozmiar tablicy na wyjœcie
   POB size
   SDP write
   POB enter
   WYP 2

// Liczymy X i Z
POB zero
£AD licznik_X
£AD licznik_Z
POB pob_tab
£AD rzk2
POB size
£AD i

loop2:
   POB i
   ODE jeden
   £AD i
   SOM end2
   rzk2: POB tab
   £AD znak
   POB rzk2
   DOD jeden
   £AD rzk2
   // Sprawdzamy czy X
   POB znak
   ODE znak_X
   SOZ zwieksz_X
   // Sprawdzamy czy Z
   POB znak
   ODE znak_Z
   SOZ zwieksz_Z
   SOB loop2

   zwieksz_X:
      POB licznik_X
      DOD jeden
      £AD licznik_X
      SOB loop2
   zwieksz_Z:
      POB licznik_Z
      DOD jeden
      £AD licznik_Z
      SOB loop2

end2:
   // Wypisujemy "X: <liczba_X>"
   POB znak_X
   WYP 2
   POB dwukropek
   WYP 2
   POB spacja
   WYP 2
   POB licznik_X
   SDP write
   POB enter
   WYP 2

   // Wypisujemy "Z: <liczba_Z>"
   POB znak_Z
   WYP 2
   POB dwukropek
   WYP 2
   POB spacja
   WYP 2
   POB licznik_Z
   SDP write
   POB enter
   WYP 2

   STP

// Definicje danych
znak: RPA
licznik_procent: RST 0
licznik_X: RST 0
licznik_Z: RST 0
jeden: RST 1
trzy: RST 3
procent: RST 37 // Kod ASCII dla '%'
enter: RST 13 // '\n'
i: RST 0
dwukropek: RST 58 // Kod ASCII dla ':'
spacja: RST 32 // Kod ASCII dla spacji
znak_P: RST 'P'
znak_X: RST 'X'
znak_Z: RST 'Z'

write:
   £AD liczba
   POB zero
   DNS
   POB liczba
   SOM abs
   SOB loop

   abs:
      POB minus
      WYP 2
      POB zero
      ODE liczba
      £AD liczba

   loop:
      DZI dziesiec
      MNO dziesiec
      £AD tmp
      POB liczba
      ODE tmp
      DOD znak_0
      DNS
      POB tmp
      DZI dziesiec
      SOZ wypisz
      £AD liczba
      SOB loop

   wypisz:
      PZS
      SOZ return
      WYP 2
      SOB wypisz

   return: PWR
   zero: RST 0
   liczba: RPA
   tmp: RPA
   dziesiec: RST 10
   znak_0: RST '0'
   minus: RST '-'

³ad_tab: £AD tab
pob_tab: POB tab
size: RST 0
tab: RPA
