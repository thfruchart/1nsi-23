```
      INP R1,2
      INP R2,2
start:CMP R0,R1
      BGT end
      ADD R3,R3,R2
      B start
end:  OUT R3,4
      HALT
```
