import urllib.request
import urllib.parse

params = urllib.parse.urlencode({'fname': 'William', 'lname': 'Christopher', 'exp': '30'})
binary_data = params.encode('utf-8')
f = urllib.request.urlopen("http://sweb.uky.edu/~sra258/Chart/samples/insertpy.php", binary_data)
print(f.read())