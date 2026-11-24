#!/usr/bin/env bash
# Builds sts-theme.zip (theme folder sts-theme/ inside) from the repo root.
# Usage: bash bin/build-zip.sh [version]   (version is checked against style.css when given)
set -euo pipefail
cd "$(dirname "$0")/.."
SLUG=sts-theme
VERSION_IN_CSS=$(grep -m1 -E '^Version:' style.css | awk '{print $2}')
if [ -n "${1:-}" ] && [ "$1" != "$VERSION_IN_CSS" ]; then
	echo "Tag version $1 does not match style.css Version $VERSION_IN_CSS" >&2
	exit 1
fi
rm -rf build && mkdir -p "build/$SLUG"
cp -r style.css theme.json functions.php readme.txt LICENSE screenshot.png assets inc parts patterns templates "build/$SLUG/"
(cd build && zip -qr "../$SLUG.zip" "$SLUG")
echo "Built $SLUG.zip ($VERSION_IN_CSS)"
