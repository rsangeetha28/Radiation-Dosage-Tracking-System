import urllib.request
import urllib.parse

params = urllib.parse.urlencode({'fname': 'Green', 'lname': 'Adams', 'exp': '24'})
binary_data = params.encode('utf-8')
f = urllib.request.urlopen("http://sweb.uky.edu/~sra258/Chart/samples/insertpy1.php", binary_data)
print(f.read())