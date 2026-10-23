## PHP
- 1 riadkový komentár - //
- viacriadková komentár - /* */

### Premenná
- definuje sa **$** na začiatku názvu premennej, napr. $premenna = "text"

### Stringy
- znak "." sa používa na spájanie stringov

### For cyklus
- výrazy vo for funkcii **for(inicializácia; podmienka; zmena) {}**:
    1. **Inicializácia (Počiatočný príkaz)**:
        - *Čo robí*: Vykoná sa iba raz na úplnom začiatku cyklu.
        - *Využitie*: Zvyčajne sa tu vytvára riadiaca premenná (počítadlo) a nastavuje sa jej počiatočná hodnota (napr. $i = 0).
    2. **Podmienka (Podmienka ukončenia)**:
        - *Čo robí*: Vyhodnocuje sa pred každým prechodom cyklu. Ak je podmienka pravdivá, kód v tele cyklu sa spustí. Ak je nepravdivá, cyklus skončí.
        - *Využitie*: Určuje, dokedy má cyklus bežať (napr. $i < 10).
    3. **Inkrementácia / Zmena (Príkaz po prechode)**:
        - *Čo robí*: Vykoná sa automaticky na konci každého prechodu cyklu (po spustení kódu v zložených zátvorkách {}).
        - *Využitie*: Najčastejšie slúži na zvýšenie alebo zníženie hodnoty počítadla (napr. $i++ alebo $i--)
- podmienky sa oddeľujú **;**, napr. for($i = 0; $i < 6; $i++)

### If podmienka
- **if(podmienka) {}** podmienka
- **else {}** else podmieka

### Foreach cyklus
- **foreach (pole as hodnota) {}** kód sa vykoná pre každý prvok
- **foreach ($pole ako $kluc => $hodnota) {}** kód s prístupom ku kľúču aj hodnote