var hoy = new Date();
            dia = hoy.getDate();
            mes = hoy.getMonth();
            ano = hoy.getYear() + 1900;

            if (mes == "0") nombremes = "Enero";
            else if (mes == "1") nombremes = "Febrero";
            else if (mes == "2") nombremes = "Marzo";
            else if (mes == "3") nombremes = "Abril";
            else if (mes == "4") nombremes = "Mayo";
            else if (mes == "5") nombremes = "Junio";
            else if (mes == "6") nombremes = "Julio";
            else if (mes == "7") nombremes = "Agosto";
            else if (mes == "8") nombremes = "Septiembre";
            else if (mes == "9") nombremes = "Octubre";
            else if (mes == "10") nombremes = "Noviembre";
            else nombremes = "Diciembre";

            document.write (dia);
            document.write (" de ");
            document.write (nombremes);
            document.write (" de ");
            document.write (ano);