<?
//lab 1
//1
select * from cust where not(rating<200);
//2
select odate, snum from ord;
//3
select rating, cname from cust where rating<300;
//4
select distinct city from cust;
//5
select sname, city from sal where (city="London")and(comm>0.11);
//6
select * from cust where (city="London")and(rating<=200);
//7
select * from ord where odate in ("1990-10-03", "1990-10-04", "1990-10-05");
select * from ord where odate between "1990-10-03" and "1990-10-05";

//lab2
//1
select * from cust where cname between 'A%' and 'S%';
//2
select * from cust where cname like '%n%';
//3
select sum(amt) from ord where snum = 1001;
//4
select count(distinct odate) from ord;
//5
select snum, max(amt) from ord group by snum;
//6
select * from cust where cname like '%s' order by cname limit 1;
//7
select city, avg(comm) from sal group by city;

//lab3
//1
select o.onum, o.amt * 0.8, s.sname, s.comm from ord o join sal s on o.snum = s.snum where o.odate in ("1990-10-04", "1990-10-06");
//2
select o.onum, s.sname, c.cname from ord o join sal s on o.snum = s.snum join cust c on c.cnum = o.cnum where not(c.city = "London" or c.city = "Rome" or s.city = "London" or s.city = "Rome") order by o.onum asc;
//3
select s.sname, sum(o.amt), sum(s.comm) from ord o join sal s on o.snum = s.snum where o.odate > "1990-10-04" group by o.snum;
//4
select o.onum, o.amt, s.sname, c.cname from ord o join sal s on o.snum = s.snum join cust c on c.cnum = o.cnum where c.city not between 'L' and 'R' and s.city not between 'L' and 'R';
//5
select o1.onum, o2.onum from ord o1 join ord o2 on o1.odate=o2.odate where o1.odate = "1990-10-03" and o1.onum <> o2.onum and o1.onum < o2.onum;
//6
select sname from sal where snum in (select snum from cust where rating < 300);
//7
select sum(amt), snum from ord group by snum having sum(amt) < (select max(amt) from ord);