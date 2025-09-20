# Hand Gesture‑Based Metro Booking System

> Touchless, accessible ticketing for metro stations — powered by real‑time hand tracking and gesture input.

---

## 🚀 Overview

This project prototypes a **contact‑free metro ticket vending interface** that replaces touchscreens with **hand gestures** detected from a standard camera. The goal is to reduce queues, improve hygiene, and make ticketing more accessible for first‑time/elderly users.

Built as part of an **HCI capstone** (Fall 2021), the system explores interaction design (personas, scenarios, HTA/KLM/Nielsen heuristics) and implements a working demo that maps **simple, learnable gestures** to common ticketing actions.

---

## ✨ Key Features

* **Touchless interaction** using a webcam — no physical contact with the kiosk
* **Simple gestures** (move → point, two‑finger tap → click, palm → cancel) for low learning curve
* **Guided flow** for: *From Station → To Station → Ticket Type → Count → Payment → Confirmation*
* **On‑screen guidance** with gesture hints and clear feedback (cursor, highlights, sound cues)
* **Queue‑friendly**: fast, single‑path flow minimizes backtracking and decision load

---

## 🧠 Gesture Set (MVP)

| Gesture                    | Action              | Notes                                               |
| -------------------------- | ------------------- | --------------------------------------------------- |
| **Index finger point**     | Move cursor / hover | Smooth cursor mapped to fingertip                   |
| **Two fingers up / pinch** | Click / select      | Primary selection gesture (validated in user tests) |
| **Open palm**              | Back / cancel       | Optional; used to go one step back                  |
| **OK sign** (optional)     | Confirm             | Alternative confirm gesture for accessibility       |

> The MVP validates **two‑finger click** as the most reliable selection action; alternate gestures can be toggled via config.

---

## 🧩 System Architecture

```mermaid
flowchart LR
    Camera[Webcam] --> Pre[Frame Preprocessing]
    Pre --> Tracker[Hand & Landmark Tracking]
    Tracker --> Gestures[Gesture Recognition]
    Gestures --> UI[UI Controller]
    UI --> Flow[Metro Booking Flow\n(From → To → Ticket Type → Payment)]
    Flow --> Confirm[Ticket Confirmation]
```

* **Hand Tracking**: Detect hand/keypoints per frame
* **Gesture Recognition**: Classify pose/transitions (e.g., two‑finger click)
* **UI Controller**: Drive on‑screen cursor, focus, and selection
* **Booking Flow**: Linear steps with clear affordances and guardrails

---

## 📦 Tech Stack

* **Python 3.8+**
* **OpenCV** (video capture + drawing)
* **(Optional) MediaPipe Hands** or equivalent landmark detector
* **NumPy** for geometry/math utilities
* **PyAutoGUI / custom UI** for cursor & selections (depending on implementation)

> If your codebase uses different libs, update the list above and the install command below.

---

## 🛠️ Setup

```bash
# 1) Clone
git clone https://github.com/<your-username>/Hand-Gesture-based-Metro-Booking-System.git
cd Hand-Gesture-based-Metro-Booking-System

# 2) (Recommended) Create a virtual environment
python -m venv .venv && source .venv/bin/activate   # Windows: .venv\\Scripts\\activate

# 3) Install dependencies
pip install -r requirements.txt

# 4) Run the app (update the entrypoint if different in your repo)
python main.py
```

**Webcam permissions**: Ensure the OS allows camera access for Python.

---

## ▶️ Using the Prototype

1. Stand \~50–70 cm from the camera with good frontal lighting.
2. **Move** your index finger to hover the on‑screen cursor.
3. **Select** with a **two‑finger gesture** (or pinch) to click.
4. Follow the on‑screen steps: *From* → *To* → *Ticket Type* → *Count* → *Payment*.
5. Use **open palm** to go back; confirm at the final screen.

**Tips**

* Avoid strong backlight; keep background simple.
* Hold gestures steady for \~200–300 ms to improve recognition.

---

## 📐 HCI & Usability (from the study)

* **Personas & scenarios**: First‑time riders and elders guided by unambiguous steps
* **HTA**: Single‑path task model minimizes branches and errors
* **KLM estimate**: Hand‑gesture flow ≈ **15.3 s** (prototype), validating low overhead compared to touch
* **Heuristic evaluation**: Mapped to Nielsen’s principles (visibility, match to real world, error prevention)
* **User study**: 28 survey responses + 6 interviews; users favored the **two‑finger click** and clear stepwise guidance

> See the full report in `docs/` for methods, data, and screenshots.

---

## 🗂️ Suggested Repository Layout

```
Hand-Gesture-based-Metro-Booking-System/
├─ src/
│  ├─ tracker/           # hand detection & landmarks
│  ├─ gestures/          # gesture classification
│  ├─ ui/                # screens & cursor controller
│  └─ main.py            # entrypoint
├─ assets/               # icons, screenshots, demo gifs
├─ docs/
│  └─ report.pdf         # HCI study (this repo’s report)
├─ requirements.txt
└─ README.md
```

> If the current code uses different paths, adjust the layout section after pushing this README.

---

## ✅ Testing Checklist

* [ ] Cursor tracks fingertip smoothly (no jitter)
* [ ] Two‑finger click registers reliably (>90% in good lighting)
* [ ] Every screen reachable with gestures only
* [ ] Back/cancel recovers from mistakes without losing progress
* [ ] Works for both left‑ and right‑handed users (toggle if supported)

---

## 🧪 Known Limitations

* Sensitive to **lighting** and **background clutter**
* Very fast motion can cause missed clicks
* Depth/occlusion of fingers reduces landmark quality

---

## 🗺️ Roadmap

* Multi‑language flow and icon‑only mode
* Voice prompts + audio confirmations
* Adjustable sensitivity & dwell‑time settings
* Station search with gesture keyboard
* Accessibility presets (tremor‑friendly clicks)

---

## 📸 Screenshots

Add captures to `assets/` and reference them here:

| Home                 | Station Select           | Payment                 |
| -------------------- | ------------------------ | ----------------------- |
| ![](assets/home.png) | ![](assets/stations.png) | ![](assets/payment.png) |

---

## 📄 License

MIT — see `LICENSE`.

---

## 🙏 Acknowledgments

* HCI course team and study participants
* Open source libraries used (OpenCV, MediaPipe, NumPy)
