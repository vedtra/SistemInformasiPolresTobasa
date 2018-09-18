/*
  Map-Util 0.1.0
  Copyright (c) 2015 Deddy Setiawan

  Released under LMFAO wHo cAREAS HAHAH Xd License
*/

function dmsToDegree(d, m, s)
{
	var degree = s/60;
	degree = degree + m;
	degree = degree / 60;
	degree = degree + d;

	return degree;
}

function degreeToDms(degree)
{
	var dms = Array();
	var d = parseInt(degree);
	var md = (degree - d) * 60;
	var m = parseInt(md);
	var s = (md - m) * 60;

	dms['d'] = Math.abs(d);
	dms['m'] = Math.abs(m);
	dms['s'] = Math.abs(s).toFixed(4);

	return dms;
}