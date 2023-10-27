
async function sendToTelegramBot(formData) {
  const token = '6513109108:AAFmBGwwOVuuYLf7FWKyDhZ9ALoOLYi1ArI';
const chat_id = '-1001517802821'; // Guruh ID sini shu yerda kiritish kerak
const url = `https://api.telegram.org/bot${token}/sendMessage`;

const message = `Ism: ${formData.name}\nTel: ${formData.tel}`;

try {
 const response = await fetch(url, {
   method: 'POST',
   headers: {
     'Content-Type': 'application/json',
   },
   body: JSON.stringify({
     chat_id: chat_id,
     text: message,
   }),
 });

 if (!response.ok) {
   throw new Error('Telegram API bilan muammo yuz berdi');
 }
} catch (error) {
 console.error('Xatolik:', error);
}
}

document.querySelector('#myForm').addEventListener('submit', async (event) => {
event.preventDefault();

const formData = {
 name: event.target.name.value,
 tel: event.target.tel.value,
};

await sendToTelegramBot(formData);

document.querySelector('#myFormContainer').innerHTML = '<p>Murojaat jo\'natildi!</p>';
});




let modal = document.getElementById("myModal_telegram_message");
let span = document.getElementsByClassName("close")[0];

span.onclick = function() {
modal.style.display = "none";
}

window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}

function showModal() {
modal.style.display = "block";

setTimeout(function(){
  modal.style.display = "none";
}, 2000);
}

document.querySelector('#myForm').addEventListener('submit', async (event) => {
event.preventDefault();



// await sendToTelegramBot(formData);

showModal();

event.target.reset();
document.querySelector('#myFormContainer').innerHTML = '<p>Murojaat jo\'natildi!</p>';
// Formani tozalash
});
