from threading import Semaphore, Thread

#global variables
A: int = 0
B: int = 0
C: int = 3

#define semaphores
#semNONAME = Semaphore(0)
#...
semA = Semaphore(1)
semB = Semaphore(0)
semC = Semaphore(0)
semD = Semaphore(0)



def threadP1():

    global A
    global B
    global C
    semA.acquire()
    A = 10
    semB.release()
    semA.acquire()
    B = B + 5
    semD.release()
    semA.acquire()
    C = C + A
    print("Thread P1 is done...")

def threadP2():

    global A
    global B
    global C
    semB.acquire()
    B = B + C
    semA.release()
    semB.acquire()
    A = A + B
    print("Thread P2 is done...")

def threadP3():

    global A
    global B
    global C
    semC.acquire()
    C = B + 10
    A = 2 * A
    B = B + A
    print("Thread P3 is done...")

def threadP4():

    global A
    global B
    global C
    semD.acquire()
    print("Sum result: ",A," + ",B," + ",C," = ",(A + B + C))
    semA.release()
    semB.release()
    semC.release()
    print("Thread P4 is done...")

threads = []
threads.append(Thread(target=threadP1))
threads.append(Thread(target=threadP2))
threads.append(Thread(target=threadP3))
threads.append(Thread(target=threadP4))

for thread in threads:
    thread.start()
for thread in threads:
    thread.join()
print("All done")