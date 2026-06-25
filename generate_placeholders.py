from PIL import Image, ImageDraw
import os

os.makedirs('assets', exist_ok=True)

logo = Image.new('RGBA', (240, 80), (8, 6, 10, 255))
d = ImageDraw.Draw(logo)
d.rectangle([0, 0, 239, 79], outline=(201, 148, 58), width=4)
d.text((22, 22), 'Bin Shahzad', fill=(255, 255, 255, 255))
logo.save('assets/logo.png')

for i in range(1, 7):
    img = Image.new('RGB', (400, 400), (20, 15, 25))
    d = ImageDraw.Draw(img)
    d.rectangle([10, 10, 390, 390], outline=(201, 148, 58), width=6)
    d.text((120, 180), f'Insta {i}', fill=(255, 255, 255))
    img.save(f'assets/insta-placeholder-{i}.png')

print('images created')
