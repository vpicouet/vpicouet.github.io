# Suggestions d'amélioration pour vpicouet.github.io

## Problèmes détectés et suggestions de corrections

### 🏠 **index.html** (Page d'accueil)

#### Problèmes actuels:
1. **Faute de grammaire**: "Suborbital mission offer" → devrait être "missions offer" (pluriel)
2. **Manque de structure visuelle**: Pas de titre/heading, texte commence directement
3. **Ton incohérent**: Mélange "SCIENCE" en majuscules avec texte normal
4. **Terminologie**: "near-space" est imprécis pour suborbital

#### Suggestions:
```html
<!-- Ajouter un titre h1 pour donner de la structure -->
<h1>Vincent Picouet</h1>
<p class="subtitle">Postdoctoral Research Scientist at Caltech</p>

<!-- Corriger le texte -->
<p>Through suborbital missions, I specialize in UV astrophysics instrumentation, systems engineering and data analysis.</p>

<p>Suborbital missions offer the unique opportunity to span the complete lifecycle of space instrumentation projects—from science requirements and instrument design to implementation, calibration, flight operations, data analysis, and science.</p>

<p>I also develop data analysis tools for astronomy and instrument design optimization, and occasionally explore quantitative approaches to social science.</p>
```

---

### 🔬 **research.html** (Recherche)

#### Problèmes critiques:
1. **Ligne 92**: Titre incomplet "Instrument modelling for" - manque la fin
2. **Ligne 101**: Mauvais liens - pointe vers pyds9plugin au lieu de generic-etc
3. **Ligne 47**: Image manquante `instrum.jpg` (le dossier s'appelle "insturmentation" avec faute)
4. **Ligne 105**: Image manquante `etc.jpg`
5. **Ligne 123**: Image manquante `ds9page.jpg`
6. **Structure**: Trop de sections différentes, pas assez cohérentes

#### Suggestions:

**1. Corriger le titre incomplet (ligne 92):**
```html
<h3>Instrument Modelling for Mission Design</h3>
<h4>Generic Exposure Time Calculator</h4>
```

**2. Corriger les liens ETC (lignes 101-102):**
```html
<p><a href="https://github.com/vpicouet/generic-etc" target="_blank">GitHub Repository</a> •
<a href="https://generic-etc.readthedocs.io/" target="_blank">Documentation</a></p>
```

**3. Restructurer pour plus de cohérence:**
```markdown
# Structure suggérée:

## 1. Instrument Development
   - Instrument Scientist (détecteurs, optique, calibration)
   - Systems Engineering (cycle de vie complet)

## 2. Software Development
   - pyds9plugin (data analysis)
   - Generic ETC (instrument modeling)

## 3. Science Focus
   - Circumgalactic Medium
   - Star Formation
```

**4. Améliorer le texte pyds9plugin (lignes 114-118):**
```html
<p>An interactive data analysis plugin for astronomical images. Built as an extension to SAOImage DS9,
pyds9plugin provides powerful image processing and analysis tools that can be automated into
multi-image pipelines. Scientists can easily integrate their own Python macros and fitting functions.</p>
```

**5. Simplifier la section Systems Engineering (lignes 56-79):**
- Trop de détails pour chaque étape
- Suggestion: résumer en 3-4 points clés avec liens vers publications principales

---

### 🎨 **projects.html** (Projets)

#### Problèmes majeurs:
1. **Ligne 45**: Mauvaise image - `presentation.jpg` au lieu de `mso_screenshot.jpg`
2. **Lignes 80-81**: `<h5>` mal placé dans capability-image (problème de style)
3. **Ligne 54**: Section "United States Analysis" vide avec juste un h2
4. **Lignes 64-75**: Texte très long et très politique/critique pour un site académique
5. **Structure**: Confusion entre MSO et US Analysis

#### Suggestions:

**1. Corriger l'image MSO:**
```html
<img src="image/mso_screenshot.jpg" alt="Modern Societies Observatory" loading="lazy">
```

**2. Simplifier drastiquement la section US:**
```html
<h2>Social Science Research</h2>

<div class="capability-item">
    <div class="capability-text">
        <h3>United States Societal Analysis</h3>
        <p>Ongoing interdisciplinary research combining quantitative data analysis and qualitative
        observations to examine social dynamics in contemporary Western societies.</p>
        <p><em>Publication forthcoming.</em></p>
    </div>
    <div class="capability-image">
        <img src="image/livre.jpg" alt="US Analysis" loading="lazy">
    </div>
</div>
```

**Pourquoi simplifier?**
- Le texte actuel est trop critique et politique pour un site académique professionnel
- Peut aliéner des lecteurs/collaborateurs potentiels
- Un site académique doit rester neutre et factuel
- Les détails peuvent être dans la publication elle-même

---

## 🎯 Suggestions générales pour la cohérence

### 1. **Navigation cohérente**
Actuellement "Projects" dans nav devient "Side Projects" dans le titre. Choisir un terme:
- Option A: "Side Projects" partout
- Option B: "Projects" partout (plus professionnel)

### 2. **Images manquantes à corriger**
Créer ou renommer:
- `image/instrum.jpg` (ou corriger le chemin vers le dossier "insturmentation")
- `image/etc.jpg` (screenshot de l'ETC)
- `image/ds9page.jpg` (screenshot de pyds9plugin)

### 3. **Ton général**
- **index.html**: Accueillant, clair, concis ✓
- **research.html**: Professionnel, technique, structuré ⚠️ (à améliorer)
- **projects.html**: Personnel mais professionnel ❌ (trop politique actuellement)

### 4. **Suggestions stylistiques CSS**

**Ajouter un titre h1 sur index.html:**
```css
/* Pour la page d'accueil sans hero */
.section h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

.section .subtitle {
    font-size: 1.1rem;
    color: var(--text-light);
    margin-bottom: 2rem;
}
```

**Améliorer les capability-item:**
```css
.capability-item {
    display: flex;
    gap: 2.5rem;  /* Réduire de 3rem à 2.5rem */
    align-items: flex-start;  /* Au lieu de center */
    margin-bottom: 2.5rem;
    padding: 2.5rem;  /* Réduire de 3rem */
}
```

---

## 📋 Checklist de priorités

### Haute priorité (à corriger avant déploiement):
- [ ] Corriger "mission offer" → "missions offer" (index.html)
- [ ] Compléter le titre "Instrument modelling for" (research.html)
- [ ] Corriger les liens ETC vers generic-etc (research.html)
- [ ] Changer image MSO: presentation.jpg → mso_screenshot.jpg (projects.html)
- [ ] Simplifier le texte US Analysis (projects.html)

### Priorité moyenne:
- [ ] Ajouter un h1 sur index.html pour structure
- [ ] Vérifier/ajouter images manquantes (etc.jpg, ds9page.jpg, instrum.jpg)
- [ ] Harmoniser "Projects" vs "Side Projects" dans navigation
- [ ] Supprimer le h5 mal placé dans projects.html

### Basse priorité (améliorations):
- [ ] Restructurer research.html en sections plus claires
- [ ] Simplifier les descriptions des étapes Systems Engineering
- [ ] Améliorer le texte pyds9plugin pour plus de clarté
- [ ] Ajouter du padding/margin pour meilleure respiration visuelle

---

## 🎨 Suggestion de structure idéale

### index.html (Page d'accueil)
```
[PHOTO à droite]
Vincent Picouet
Postdoctoral Research Scientist at Caltech

3 paragraphes concis:
- Qui je suis + spécialité
- Ce que je fais (suborbital missions)
- Autres intérêts (software, social science)
```

### research.html
```
[Hero compact]
Instrument Scientist & Systems Engineer

1. Instrument Development
   - Scientist (image)
   - Systems Engineering (image)

2. Software Development
   - pyds9plugin (image)
   - Generic ETC (image)

3. Science Focus
   - CGM
   - Star formation
```

### projects.html
```
[Hero compact]
Side Projects

1. Modern Societies Observatory
   - Description
   - [Image MSO]
   - Bouton accès

2. US Societal Analysis
   - Description courte et neutre
   - [Image livre]

3. Astrophotography
   - [Grille photos]
```

---

## 💡 Conseils finaux

1. **Rester professionnel**: Un site académique doit pouvoir être montré à n'importe quel collaborateur potentiel
2. **Être concis**: Les visiteurs ne lisent pas de longs paragraphes - aller à l'essentiel
3. **Cohérence**: Même ton, même structure sur toutes les pages
4. **Visuels**: Les images cassent le texte et rendent le site plus dynamique
5. **Publications**: Toujours linker vers les publis plutôt que de détailler ici

**Le site est déjà très bien structuré, il ne manque que ces petits ajustements pour qu'il soit parfait!**
