const theatre = document.querySelector('.theatre');
const seats = document.querySelectorAll('.row .seat:not(.occupiedseat)');
const count = document.getElementById('count');


//total antal platser + local storage. OK?
function updateSelectedSeatCount() {
    const selectedSeats = document.querySelectorAll('.row .seat.selectedseat');

        const seatsIndex = [...selectedSeats].map(seat => {
            return [...seats].indexOf(seat);
        });

    localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

    const text = document.querySelector('.text');
    text.innerHTML = `You have selected ${selectedSeats.length} seats.`;

}
//sparade platser
function populateUI() {
    const storedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

    if(storedSeats !== null && storedSeats.length > 0) {
        seats.forEach((seat, index) => {
            if(storedSeats.indexOf(index) > -1) {
                seat.classList.add('selectedseat');
            }
        });
    }
}
//klickhantering-- funkar nu???
theatre.addEventListener('click', (e) => {
    if (e.target.classList.contains('seat') && 
    !e.target.classList.contains('occupiedseat')
    ){
        e.target.classList.toggle('selectedseat');
    }
    updateSelectedSeatCount()
});

populateUI();
updateSelectedSeatCount();