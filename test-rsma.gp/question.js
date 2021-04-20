let questiondata = [ 

];

let questions = [];
let score = 0, answeredQuestions =0;
let appContainer =document.getElementById('questions-container');
let scoreContainer =document.getElementById('score-container');
scoreContainer.innerHTML = 'score: ${score}/${questionData.lenght}';

function shuffle(arr) {
    for (let i = arr.lengh - 1; i > 0; i--) {
        const j = Math.floor(Math.random()* (i+1));
        [arr[i], arr[j]] = [arr[j], arr[i]];

     }
}
shuffle (questionsData);