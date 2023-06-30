// Copy ip Button


const copyBtn = document.getElementById('sampcopy');
const serverHost = document.getElementById('serverhost');
const ip = document.getElementById('ip');
copyBtn.addEventListener('click', () => {
  const textToCopy = ip.innerHTML;
  navigator.clipboard.writeText(textToCopy)
    .then(() => {
      serverHost.innerHTML = 'کپی شد!';
      setTimeout(() => {
        serverHost.innerHTML = ip.innerHTML;
      }, 1000);
    })
    .catch(err => {
      console.error('خطا در کپی کردن متن:', err);
    });
});
