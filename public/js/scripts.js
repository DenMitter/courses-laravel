const emailInput = document.getElementById("validateEmail");
const submitButtons = document.getElementsByClassName("modal__submit-button");

document.addEventListener('DOMContentLoaded', function () {
  const modalButtons = document.querySelectorAll('.modal-btn');
  const modalOverlay = document.querySelector('.modal-overlay');
  const modals = document.querySelectorAll('.modal');
  const sprintHeaders = document.querySelectorAll('.sprint-content');
  var elementsWithTooltip = document.querySelectorAll('[data-tooltip]');
  var tooltip = document.querySelector('.tooltip-small');
  var elementsWithAnchor = document.querySelectorAll('[data-anchor]');
  var defaultActiveElement = document.querySelector('[data-anchor="active"]');

  // Логіка для аккордеонів
  for (let i = 0; i < sprintHeaders.length; i++) {
    sprintHeaders[i].addEventListener("click", function () {
      // Закриваємо всі інші аккордеони
      for (let j = 0; j < sprintHeaders.length; j++) {
        if (j !== i) {
          sprintHeaders[j].classList.remove("active");
        }
      }
      // Перемикаємо вибраний аккордеон
      this.classList.toggle("active");
    });
  }

  // Логіка для прокрутки та якорів
  window.addEventListener('scroll', function () {
    const fromTop = window.scrollY;
    elementsWithAnchor.forEach(function (link) {
      const section = document.querySelector(link.getAttribute('href'));
      if (section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  });

  elementsWithAnchor.forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      const offsetTop = targetElement.offsetTop;
      window.scrollTo({
        top: offsetTop,
        behavior: 'smooth'
      });
    });
  });

  elementsWithAnchor.forEach(function (element) {
    // Зберігаємо початковий колір кожного елемента
    element.style.color = element.dataset.initialColor;
    element.addEventListener('click', function () {
      // Змінюємо колір клікнутого елемента на чорний
      element.classList.add('active');
      // Змінюємо колір попереднього активного елемента на його початковий колір
      if (defaultActiveElement && defaultActiveElement !== element) {
        defaultActiveElement.style.color = defaultActiveElement.dataset.initialColor;
      }
      // Оновлюємо активний елемент на клікнутий елемент
      defaultActiveElement = element;
    });
  });

  if (defaultActiveElement) {
    defaultActiveElement.classList.add('active');
  }

  // Логіка для модальних вікон
  modalButtons.forEach((el) => {
    el.addEventListener('click', (e) => {
      let modalButton = e.currentTarget.getAttribute('data-modal-btn');
      modals.forEach((el) => {
        el.classList.remove('modal--visible');
      });
      modalOverlay.classList.add('modal-overlay--visible');
      document.querySelector(`[data-modal="${modalButton}"]`).classList.add('modal--visible');
    });
  });

  function closeModal() {
    modalOverlay.classList.remove('modal-overlay--visible');
    modals.forEach((el) => {
      el.classList.remove('modal--visible');
    });
  }

  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      closeModal();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeModal();
    }
  });

  // Логіка для підказок (tooltip)
  elementsWithTooltip.forEach(function (element) {
    element.addEventListener('mouseover', function () {
      var rect = element.getBoundingClientRect();
      var elementTop = rect.top + window.scrollY;
      var elementLeft = rect.left + window.scrollX;
      var elementWidth = rect.width;
      var tooltipWidth = tooltip.offsetWidth;

      tooltip.innerText = element.dataset.tooltip;
      tooltip.style.display = 'block';
      tooltip.style.top = (elementTop + rect.height + 12) + 'px';
      tooltip.style.left = (elementLeft + (elementWidth / 2) - (tooltipWidth / 2)) + 'px';
    });

    element.addEventListener('mouseout', function () {
      tooltip.style.display = 'none';
    });
  });

  // Маски
  document.addEventListener('DOMContentLoaded', function() {
    var phoneInput = document.querySelector('input[name="phone"]');
    if (phoneInput) {
      Inputmask({ mask: '+38 (999) 999-99-99' }).mask(phoneInput);
    }
  });  
});

// Функція для валідації email
function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Обробник події вводу email
if (emailInput) {
  emailInput.addEventListener("input", function () {
    const email = emailInput.value;
    for (let i = 0; i < submitButtons.length; i++) {
      if (validateEmail(email)) {
        submitButtons[i].classList.remove("disabled");
        submitButtons[i].removeAttribute("disabled");
      } else {
        submitButtons[i].classList.add("disabled");
        submitButtons[i].setAttribute("disabled", "true");
      }
    }
  });
}

// Отримання доступу до медіа пристроїв (камера та мікрофон)
// navigator.mediaDevices.getUserMedia({ video: true, audio: true })
//     .then(function (stream) {
//         // Відображення медіа потоку в локальному відео елементі
//         var localVideo = document.getElementById('localVideo');
//         localVideo.srcObject = stream;

//         // Відправлення медіа потоку на сервер або підключення до іншого учасника конференції

//         // Додавання обробника подій на медіа потік (наприклад, для додавання нового учасника)
//         stream.onaddtrack = function (e) {
//             // Відображення медіа потоку іншого учасника у відео елементі
//             var remoteVideo = document.getElementById('remoteVideo');
//             remoteVideo.srcObject = e.stream;
//         };
//     })
//     .catch(function (err) {
//         console.log("Помилка при отриманні доступу до медіа пристроїв: " + err);
//     });