import urllib.request
import urllib.parse
import csv

with open('C:/Users/Sangeetha/Desktop/pinsert.csv') as csvfile:
    reader = csv.DictReader(csvfile)
    for row in reader:
        print(row['First'], row['Last'], row['Experience'])
        params = urllib.parse.urlencode({'fname': row['First'], 'lname': row['Last'], 'exp': row['Experience']})
        binary_data = params.encode('utf-8')
        f = urllib.request.urlopen("http://sweb.uky.edu/~sra258/Chart/samples/insertpy.php", binary_data)

#print(f.read())