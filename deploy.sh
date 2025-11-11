#!/bin/bash

# Script de déploiement du site web vpicouet.github.io
# Usage: ./deploy.sh "Votre message de commit"

# Vérifier qu'un message de commit est fourni
if [ -z "$1" ]; then
    echo "❌ Erreur: Veuillez fournir un message de commit"
    echo "Usage: ./deploy.sh \"Votre message de commit\""
    exit 1
fi

COMMIT_MESSAGE="$1"

echo "📝 Ajout des fichiers modifiés..."
git add .

echo "💾 Création du commit..."
git commit -m "$(cat <<EOF
$COMMIT_MESSAGE

🤖 Generated with [Claude Code](https://claude.com/claude-code)

Co-Authored-By: Claude <noreply@anthropic.com>
EOF
)"

if [ $? -ne 0 ]; then
    echo "❌ Erreur lors du commit"
    exit 1
fi

echo "🚀 Push vers GitHub..."
git push origin master

if [ $? -ne 0 ]; then
    echo "❌ Erreur lors du push"
    exit 1
fi

echo "✅ Déploiement réussi!"
echo "🌐 Le site sera visible dans 1-2 minutes sur: https://vpicouet.github.io"
