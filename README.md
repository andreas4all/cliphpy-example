cliphpy-example
===============

This is repository for how to use Cliphpy framework.

1. Clone repository to your local dir

	```
	cd /to/your/location/
	git clone https://github.com/andreas4all/cliphpy-example.git .
	```
2. Init and update Cliphpy submodule

	```
	git submodule init
	git submodule update
	```
	
3. Run install example script

	```
	cd cliphpy
	./install.example.sh
	```
	
4. Run example script

	```
	cd ../Example/
	./example.php --child 2
	```
	
If log file was created in log directory, then it's all okay. Pid file was created in pid directory, after ending script it will be removed. If you will check this, just comment out the last line in _example.php_.

Script cannot be runned with same child id at one moment. You get error message, that this child is already running.