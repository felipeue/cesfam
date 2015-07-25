curl http://3.bp.blogspot.com/-tS7yAVWL2Ts/VUqI5jRZcbI/AAAAAAAABnE/G3gmUYycYZA/s1600/jajajaj.jpg >> tarea4.jpg

gs -sDEVICE=tiff24nc -r300x300 -dNOPAUSE -sOutputFile=tarea4.tif -- tarea4.jpg
tesseract -l spa *.tif output