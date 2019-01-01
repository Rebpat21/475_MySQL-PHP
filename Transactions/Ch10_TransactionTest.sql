begin;
insert into bittest values (b'1011', b'11111');
commit;

select b1+0, b2+0 from bittest;

begin;
insert into bittest values(b'1010', b'101');
rollback;

select b1+0, b2+0 from bittest;