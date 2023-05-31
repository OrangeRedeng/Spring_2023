

			function checkAnswer(inputId, answers){
				var	userAnswer = document.getElementById(inputId).value;
				userAnswer = userAnswer.toLowerCase();
				for(var i =0; i < answers.length; i++){
					if(userAnswer == answers[i]){
						score++
						break;
					}
				}

			}

			function checkAnswers() {
				
				checkAnswer("userAnswer1", ["сон", "сноведение", "Сон"]);
				checkAnswer("userAnswer2", ["морской", "укус акулы"]);
				checkAnswer("userAnswer3", ["шахматный", "мертвый"]);

				alert("Вы отгадали " + score + " загадок");

			}
	






	if(isset($_GET["userAnswer1"]) && isse($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){}