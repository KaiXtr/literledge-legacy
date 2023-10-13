from PIL import Image,ImageDraw
import urlparse

pom = request.GET.get('p')

img = Image.new('RGB',(500,300),color='black')
draw = ImageDraw.Draw(img)
draw.text((10,10), "Hello World", fill=(255,255,0))