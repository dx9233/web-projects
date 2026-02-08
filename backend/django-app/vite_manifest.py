# utils/vite_manifest.py
import json
from pathlib import Path

def get_vite_assets():
    manifest_path = Path('static/dist/manifest.json')
    if manifest_path.exists():
        with open(manifest_path) as f:
            return json.load(f)
    return {}