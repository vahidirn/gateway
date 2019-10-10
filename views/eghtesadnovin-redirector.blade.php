<html>
    <body>
        <script>
        	var form = document.createElement("form");
        	form.setAttribute("method", "POST");
        	form.setAttribute("action", "https://pna.shaparak.ir/_ipgw_/payment/");
        	form.setAttribute("target", "_self");

            var hiddenField = document.createElement("input");
        	hiddenField.setAttribute("name", "language");
        	hiddenField.setAttribute("value", "fa");
            form.appendChild(hiddenField);


            var hiddenField = document.createElement("input");
        	hiddenField.setAttribute("name", "token");
        	hiddenField.setAttribute("value", "{{$token}}");
            form.appendChild(hiddenField);


        	document.body.appendChild(form);
        	form.submit();
        	document.body.removeChild(form);
        </script>
    </body>
</html>
