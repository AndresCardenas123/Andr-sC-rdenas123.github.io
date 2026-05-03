<?php
// Widget flotante + Landbot (carga perezosa)
?>
<style>
.help-pill {
  position: fixed;
  right: 18px;
  bottom: 18px;
  z-index: 999;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  min-width: 248px;
  max-width: min(300px, calc(100vw - 24px));
  padding: 10px 15px;
  border: 0;
  border-radius: 999px;
  cursor: pointer;
  background: linear-gradient(135deg, #23c9d2 0%, #1f7cff 100%);
  color: #ffffff;
  box-shadow: 0 18px 32px rgba(31, 124, 255, 0.24);
  transition: transform 0.15s ease, box-shadow 0.15s ease;
}

.help-pill:hover {
  transform: translateY(-2px);
  box-shadow: 0 22px 40px rgba(31, 124, 255, 0.28);
}

.help-pill__start {
  display: flex;
  align-items: center;
  gap: 10px;
  min-width: 0;
}

.help-pill__icon {
  width: 34px;
  height: 34px;
  border-radius: 999px;
  display: grid;
  place-items: center;
  background: rgba(255, 255, 255, 0.18);
  flex: 0 0 auto;
  font-size: 16px;
  font-weight: 800;
}

.help-pill__text {
  font-weight: 700;
  font-size: 14px;
  line-height: 1;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.help-pill__logo {
  width: 22px;
  height: 22px;
  object-fit: contain;
  flex: 0 0 auto;
  background: transparent;
  border-radius: 999px;
  opacity: 0.95;
}

@media (max-width: 768px) {
  .help-pill {
    right: 12px;
    bottom: 12px;
    min-width: 220px;
  }
}
</style>

<button class="help-pill" id="chat-launcher" type="button" aria-label="Abrir ayuda">
  <span class="help-pill__start">
    <span class="help-pill__icon" aria-hidden="true">?</span>
    <span class="help-pill__text">&iquest;Necesitas ayuda?</span>
  </span>
  <img class="help-pill__logo" src="imagenes/LOGO MYPETS.jpg" alt="My Pets">
</button>

<script>
  window.addEventListener('mouseover', initLandbot, { once: true });
  window.addEventListener('touchstart', initLandbot, { once: true });
  var myLandbot, landbotLoading = false;

  function initLandbot() {
    if (myLandbot || landbotLoading) return;
    landbotLoading = true;
    var script = document.createElement('script');
    script.type = 'module';
    script.async = true;
    script.addEventListener('load', function() {
      myLandbot = new Landbot.Popup({
        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-3324965-BVWTB0T7UQ8GRPQF/index.json'
      });
    });
    script.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.mjs';
    var firstScript = document.getElementsByTagName('script')[0];
    firstScript.parentNode.insertBefore(script, firstScript);
  }

  document.getElementById('chat-launcher').addEventListener('click', function() {
    if (myLandbot) {
      myLandbot.open();
      return;
    }
    initLandbot();
    var interval = setInterval(function() {
      if (myLandbot) {
        myLandbot.open();
        clearInterval(interval);
      }
    }, 200);
  });
</script>

