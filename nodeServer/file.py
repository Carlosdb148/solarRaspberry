from PIL import Image
import cv2
import numpy as np
import matplotlib.pyplot as plt
import sys
import json
# print(sys.argv)
# im =  sys.argv[1]
# print(im)
# img = Image.open('./sol.jpg')
img = Image.open(sys.argv[1])
size = img.size
img = cv2.imread(sys.argv[1], cv2.IMREAD_COLOR)

# Convert to grayscale.
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
  
# Blur using 3 * 3 kernel.
gray_blurred = cv2.blur(gray, (3, 3))
  
# Apply Hough transform on the blurred image.
detected_circles = cv2.HoughCircles(gray_blurred, 
                   cv2.HOUGH_GRADIENT, 1, 20, param1 = 50,
               param2 = 30, minRadius = 1, maxRadius = 20)
  
# Draw circles that are detected.
if detected_circles is not None:
  
    # Convert the circle parameters a, b and r to integers.
    detected_circles = np.uint16(np.around(detected_circles))
  
    for pt in detected_circles[0, :]:
        a, b, r = pt[0], pt[1], pt[2]
  
        # Draw the circumference of the circle.
        cv2.circle(img, (a, b), r, (0, 255, 0), 2)
  
        # Draw a small circle (of radius 1) to show the center.
        cv2.circle(img, (a, b), 1, (0, 0, 255), 3)
       # cv2.imshow("Detected Circle", img)
        #cv2.waitKey(0)
        img



info = {
    "x" : int(detected_circles[0][0][0]),
    "y" : int(detected_circles[0][0][1]),
    "radius" : int(detected_circles[0][0][2]),
    "width" : int(size[0]),
    "height" : int(size[1]),
}

info = json.dumps(info)
print(info)    
# print(detected_circles)    
cv2.imwrite('savedImage.jpg', img)
img = Image.fromarray(img, 'RGB')
img