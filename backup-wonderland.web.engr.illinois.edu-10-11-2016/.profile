# .profile Template
#
# This file is executed each time you start up a new Korn shell (/bin/ksh),
# that is, whenever you create a new terminal session.
#
umask 0022
#
# If you want to modify an environment variable, for example, the search
# path, take into account the value that the variable already has.  For example
# if you wish to add the directory /local/apps1/cl to your search path,
# you would use
#
# export PATH=$PATH:/local/apps1/cl
#
# This merely appends the directory /local/apps1/cl to the already-existing
# search path.
#
# You can also create aliases for often-used commands.  For example, if you
# would prefer to type 'dir' instead of 'ls -FC', you could use 
#
# alias dir="ls -FC"
#
# so that each time you typed 'dir', it would be as though you had typed
# 'ls -FC'
#
