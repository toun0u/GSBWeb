#!/usr/bin/env sh

dir=$(d=${0%[/\\]*}; cd "$d"; cd "../vendor/doctrine/orm/bin" && pwd)

# See if we are running in Cygwin by checking for cygpath program
if command -v 'cygpath' >/dev/null 2>&1; then
	# Cygwin paths start with /cygdrive/ which will break windows PHP,
	# so we need to translate the dir path to windows format. However
	# we could be using cygwin PHP which does not require this, so we
	# test if the path to PHP starts with /cygdrive/ rather than /usr/bin
	if [[ $(which php) == /cygdrive/* ]]; then
<<<<<<< HEAD
		dir=$(cygpath -m "$dir");
=======
		dir=$(cygpath -m $dir);
>>>>>>> 3bd5578b812db39455a5bce5d5f8144f910f17e2
	fi
fi

dir=$(echo $dir | sed 's/ /\ /g')
"${dir}/doctrine.php" "$@"
