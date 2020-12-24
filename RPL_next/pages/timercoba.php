<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"  type="text/javascript"></script>
              <span id="minutes">00</span>
              <span id="colon">:</span>
              <span id="seconds">00</span>
              <span id="hasil"></span>
              <button onclick="stopTime()">Stop time</button>
              <form method="post" action="./timerhasil.php">
              <input type="hidden" name="time" id="time" value="">
              <span id="udh"></span>

    <script type="text/javascript">
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var hasil = document.getElementById("hasil");
        var hasil2 = document.getElementById("udh")
        
        var totalSeconds = 0;
        var skor = 0;
        setInterval(setTime, 1000);

        function setTime()
        {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds%60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }

        function stopTime() {
            skor = pad(totalSeconds)
            hasil2.innerHTML = skor;
            document.getElementById("time").value = skor;
        }


    </script>