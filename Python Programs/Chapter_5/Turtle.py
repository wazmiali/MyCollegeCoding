from turtle import*
from colorsys import*
bgcolor('black')
tracer(10)
h=0.6
for i in range(1090):
  c= hsv_to_rgb(h, 1,1)
  h +=1/3
 
  begin_fill()
  fillcolor(c)
  circle(-50, 150)
  forward(i)
  left(29)
  end_fill()

done()
