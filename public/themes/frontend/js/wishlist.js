//Time countdown
const timeDays = document.querySelector(".countdown-days h3");
const timeHours = document.querySelector(".countdown-hours h3");
const timeMinutes = document.querySelector(".countdown-mins h3");
const timeSeconds = document.querySelector(".countdown-secs h3");

if (timeDays && timeHours && timeMinutes && timeSeconds) {
  const setTimeCountdown = (timeReMaining) => {
    const days = Math.floor(timeReMaining / 86400);
    const hours = Math.floor((timeReMaining - days * 86400) / 3600);
    const minutes = Math.floor(
      (timeReMaining - days * 86400 - hours * 3600) / 60
    );
    const seconds = Math.floor(
      timeReMaining - days * 86400 - hours * 3600 - minutes * 60
    );

    timeDays.textContent = `${days}`.padStart(2, "0");
    timeHours.textContent = `${hours}`.padStart(2, "0");
    timeMinutes.textContent = `${minutes}`.padStart(2, "0");
    timeSeconds.textContent = `${seconds}`.padStart(2, "0");
  };

  const deadLine = new Date("2023/12/18 12:00:00");
  const newDate = new Date();
  let timeReMaining = Math.floor((deadLine - newDate) / 1000);
  if (timeReMaining > 0) {
    setInterval(() => {
      setTimeCountdown(timeReMaining);
      timeReMaining--;
    }, 1000);
  } else {
    timeDays.textContent = 0;
    timeHours.textContent = 0;
    timeMinutes.textContent = 0;
    timeSeconds.textContent = 0;
  }
}
