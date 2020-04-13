function myFunctionmu() {
                    var change = document.getElementById("togglemu");
					var music = document.getElementById("mymusic");
                    if (change.innerHTML == "Mute Music")
                    {
                        change.innerHTML = "Unmute Music";
						music.pause();
                    }
                    else {
                        change.innerHTML = "Mute Music";
						music.play();
                    }
					
                }